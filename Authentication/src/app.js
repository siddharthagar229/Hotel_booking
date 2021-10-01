var express=require("express");
var app=express();
var path=require("path");
var hbs=require("hbs");
require("./db/conn");

var port=process.env.port || 3000;
// const static_path=path.join(__dirname, "../public");
// app.use(express.static(static_path));

const template_path=path.join(__dirname, "../templates/views");
const partials_path=path.join(__dirname, "../templates/partials");
app.set("view engine","hbs");
app.set("views", template_path);
hbs.registerPartials(partials_path);

app.get("/", (req,res)=>{
    // res.send("hello from me")
    res.render("index")
});

app.listen(port, ()=>{
    console.log(`running at port ${port}`);
})