term.clear()
print("Listening for inputs")
while true do
        local data = http.get("http://www.<websitehere>/variables/doorstatus.txt")
        currentdata = data.readAll()
        if currentdata == "open" then
                redstone.setOutput("back",true)
        end
        if currentdata == "closed" then
                redstone.setOutput("back",false)
        end
end
data.close()