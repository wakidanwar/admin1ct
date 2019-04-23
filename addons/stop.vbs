Dim oShell : Set oShell = CreateObject("WScript.Shell")
' Icecast_Off '
oShell.Run "taskkill /IM icecast.exe /F", , True