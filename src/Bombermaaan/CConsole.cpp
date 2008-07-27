/************************************************************************************

    Copyright (C) 2000-2002, 2007 Thibaut Tollemer

    This file is part of Bombermaaan.

    Bombermaaan is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Bombermaaan is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Bombermaaan.  If not, see <http://www.gnu.org/licenses/>.

************************************************************************************/


//////////////////////
// CConsole.cpp

#include "stdafx.h"
#include "CConsole.h"
#include <stdio.h>

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************

//! Display a dot on the console every X repeated messages
#define REPEATED_MESSAGES_LIMIT     300

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************

CConsole::CConsole()
{
    // The console is not opened yet
    m_Open = false;

    // Default console text color : black background, grey foreground.
    m_Color = CONSOLE_FOREGROUND_RED | 
              CONSOLE_FOREGROUND_GREEN | 
              CONSOLE_FOREGROUND_BLUE;

    // No message
    m_Message[0] = '\0';
    m_NumberOfRepeatedMessages = 0;
    
    // Filter repeated messages by default
    m_FilterRepeatedMessage = true;
}

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************

CConsole::~CConsole()
{
    // If the console is opened
    if (m_Open)
    {
        // Close the console
        Close ();
    }
}

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************

CConsole& CConsole::GetConsole (void)
{
    static CConsole rConsole;

    // Return the console singleton   
    return rConsole;
}

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************

void CConsole::Open (void)
{
    // If the console is not opened yet
    if (!m_Open)
    {
        // Create a console window
        AllocConsole ();

        // Get the console output (needed to send data to the console)
        m_StdOut = GetStdHandle (STD_OUTPUT_HANDLE);
        
        // The console window is now opened
        m_Open = true;
    }
}

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************

void CConsole::Close (void)
{
    // If the console is opened
    if (m_Open)
    {
        // Destroy the console window
        FreeConsole ();

        // The console window is not opened anymore
        m_Open = false;
    }
}

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************

void CConsole::Write (const char *pMessage, ...)
{
    // If the console is opened
    if (m_Open)
    {
        // Format the given string using the given arguments ("..." parameter)
        char Message [2048];
	    va_list arg;
	    va_start (arg, pMessage);
	    vsprintf (Message, pMessage, arg);
	    va_end (arg);

        // If we have to filter repeated messages
        if (m_FilterRepeatedMessage)
        {        
            // If the last message written to the console is not the same
            if (strcmp(Message, m_Message) != 0)
            {
                // Send the formatted string to the console output
                DWORD Count;
                WriteConsole (m_StdOut, Message, strlen(Message), &Count, NULL);

                // Save the message
                strcpy(m_Message, Message);

                // Stop the chain of repeated messages (if there is one)
                m_NumberOfRepeatedMessages = 0;
            }
            // If the last message written to the console is the same
            else
            {
                // It's a repeated message
                m_NumberOfRepeatedMessages++;

                // Show that messages are being repeated, by writing a dot 
                // every REPEATED_MESSAGES_LIMIT repeated messages.
                if ((m_NumberOfRepeatedMessages % REPEATED_MESSAGES_LIMIT) == 0)
                {
                    DWORD Count;
                    WriteConsole (m_StdOut, ".", 1, &Count, NULL);
                }
            }
        }
        // If we don't have to filter repeated messages
        else
        {
            // Send the formatted string to the console output
            DWORD Count;
            WriteConsole (m_StdOut, Message, strlen(Message), &Count, NULL);
        }
    }
}

//******************************************************************************************************************************
//******************************************************************************************************************************
//******************************************************************************************************************************
