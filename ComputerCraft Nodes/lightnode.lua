term.clear()
print("Listening for inputs")
while true do
        local data = http.get("http://www.<websitehere>/variables/lightstatus.txt")
        currentdata = data.readAll()
        if currentdata == "on" then
                redstone.setOutput("back",true)
        end
        if currentdata == "off" then
                redstone.setOutput("back",false)
        end
end
data.close()