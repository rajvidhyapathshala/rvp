const express = require("express")
const app = express();
const port = 3000;

app.use(express.static(__dirname + "/public"));
app.get("/", (req,res)=>{
    res.sendFile(__dirname + "/index.html");
});
app.get("/editVideo.html", (req, res) => {
    res.sendFile(__dirname + "/editVideo.html");
});
app.listen(port, () => {
    console.log('Example app listening at http://localhost:port');
});