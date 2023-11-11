do
Set wshshell = wscript.CreateObject("WScript.Shell")
Wshshell.run "Notepad"
wscript.sleep 100
wshshell.sendkeys "ani"
wscript.sleep 100
wshshell.sendkeys "dyo"
wscript.sleep 100
wshshell.sendkeys "mazak"
wscript.sleep 100
wshshell.sendkeys "ay"
wscript.sleep 100
wshshell.sendkeys "!"
loop