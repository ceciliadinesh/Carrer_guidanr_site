const mongoose=require('mongoose');
const newbackendSchema=new mongoose.Schema({
    name:{
        type:String,
        required:true
    },
    email:{
        type:String,
        required:true
    },
    password:{
        type:String,
        required:true,
        min:0
    }
    })
const Backend=mongoose.model('Backend',newbackendSchema);
module.exports=Backend;