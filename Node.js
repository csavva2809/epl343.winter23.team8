const express = require ('express');
const bodyParser = require('body-parser');
const fs = require('fs');
const app = express();
const port= 3000;

app.use(bodyParser.json());
app.post('/signup',(req,res)=>{
    const userInfo = req.body;

const csvData = '${userInfo.firstname},${userInfo.lastname},${userInfo.email},${userInfo.password}\n';
fs.appendFile('usersInfo.csv',csvData,(err)=>{
if (err){
    console.error(err);
    resizeBy.status(500).json({message:'Internal Server Error'});

}else{
    resizeBy.json({message:'Signed up successfully'});
}

});

});
app.listen(port,()=>{console.log('http:localhost:${port}')});