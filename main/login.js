const mongoose = require('mongoose');
const express = require('express');
const app = express();
const fs=require("fs")
const path = require('path');
const session = require('express-session');


console.log(fs.existsSync(__dirname+'/public'))
app.use(express.static(__dirname+'/public'))
const Backend = require('./module/product');


app.use(express.urlencoded({ extended: true }));





main().catch(err => console.log(err));

async function main() {
  await mongoose.connect('mongodb://127.0.0.1:27017/assetlogin');
  console.log("connected");

  // use `await mongoose.connect('mongodb://user:password@127.0.0.1:27017/test');` if your database has auth enabled
}

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use(session({
  secret: 'your-secret-key',
  resave: false,
  saveUninitialized: true,
}));
app.get('/login', (req, res) => {
    res.render('connect/login');
  });
  app.get('/courseotaku', (req, res) => {
    res.render('connect/courseotaku');
  });
  app.get('/profile', (req, res) => {
    res.render('connect/profile');
  });

  app.get("/image",(req,res)=>{
    //const img=req.params.id;
    const imgstream=fs.createReadStream(`logo.png`);
    imgstream.pipe(res);
  })
// Routes

app.post('/submit', (req, res) => {
  const { name, email, password } = req.body;

  const backendData = new Backend({
    name,
    email,
    password
  });
  

  backendData.save()
    .then(() => {
      res.redirect("/profile")
    })
    .catch(err => {
      console.error('Error saving data', err);
      res.status(500).send('Internal Server Error');
    });
});

  
app.listen(5001, () => {
  console.log("Listening on port 5001");
});

  