var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("mydb");
  var myobj = [
    {  name: 'Nirzar Modi', email: 'flyings11@gmail.com',website:"lmn.in",comment:"Good",gender:"Male"},
    {  name: 'Sparsh Jain', email: 'Liutenat!4@outlook.com',website:"jain.in",comment:"Deligent",gender:"Male"},
    {  name: 'Suyash', email: 'Bigshow5@yahoo.com',website:"games.in",comment:"Gamer",gender:"Male"},
    {  name: 'Aniket Vishwakarma', email: 'lateop@gmail.com',website:"coder.com",comment:"Coder",gender:"Male"},
    {  name: 'Rohit Reddy', email: 'riderop@hotmail.com',website:"reddys.com",comment:"actor",gender:"Male"},
    {  name: 'Kshitij Gopali', email: 'caller65@hotmail.com',website:"rider.com",comment:"cyclist",gender:"Male"},
    {  name: 'Nishanth Navada', email: 'tallguy@gmail.com',website:"navadaclicks.grp",comment:"Photographer",gender:"Male"},
    {  name: 'Mrudhulraj N', email: 'purplehoser@yahoo.com',website:"NBA.in",comment:"Basketballer",gender:"Male"},
    {  name: 'Sagar Bagali', email: 'bigmanbagali@outlook.com',website:"idlivada.com",comment:"Bigman",gender:"Male"},
    {  name: 'Pranavb S', email: 'lambuman@gmail.com',website:"Complan.com",comment:"Longman",gender:"Male"}
  ];
  dbo.collection("registration").insertMany(myobj, function(err, res) {
    if (err) throw err;
    console.log("Number of documents inserted: " + res.insertedCount);
    db.close();
  });
});