_G.Key = "King-Free-Hub"

local keys = {
    "King-Free-Hub",
    "Key2",
    "key3"
}

local counter = 1
local keyCheck
for i,v in pairs(keys) do
    if counter == #keys then
    --not whitelisted!
    keys = ""
    game.Players.LocalPlayer:Kick("Not a valid key!")
    else
        if v == _G.Key then
            --Whitelisted!
            print("Successfully whitelisted!")
            keyCheck = _G.Key
            keys = ""
        else
            counter = counter +1
        end
    end
end

while true do
    if _G.Key == keyCheck then
        --Not spoofed
    else
        game.Players.LocalPlayer:Kick("keyไม่ถูกไปหาkeyด้วยไอเด็กเหี้ย")
    end
    wait()
end
