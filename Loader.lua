local key = _G.Key
local check = "https://raw.githubusercontent.com/KingFreeAllHub/King-Hub-Blox-Fruit/main/check.php?key=" .. key
if game:HttpGet(check) == "Whitelisted" then
loadstring(game:HttpGet("https://raw.githubusercontent.com/KingFreeAllHub/King-Hub-Blox-Fruit/main/script.lua"))()
else
game.Players.LocalPlayer:Kick("เสือกควยไรไอเหี้ยkeyไม่ถูก")
end
