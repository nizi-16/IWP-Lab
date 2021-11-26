var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("mydb");
  var myobj = [
    {  Username: 'Nirzar Modi', Password: 'flyings11'},
    {  Username: 'Sparsh Jain', Password: 'Liutenat!4'},
    {  Username: 'Suyash', Password: 'Bigshow5'},
    {  Username: 'Aniket Vishwakarma', Password: 'lateop'},
    {  Username: 'Rohit Reddy', Password: 'riderop'},
    {  Username: 'Kshitij Gopali', Password: 'caller65'},
    {  Username: 'Nishanth Navada', Password: 'tallguy'},
    {  Username: 'Mrudhulraj N', Password: 'purplehoser'},
    {  Username: 'Sagar Bagali', Password: 'bigmanbagali'},
    {  Username: 'Pranavb S', Password: 'lambuman'}
  ];
  dbo.collection("login").insertMany(myobj, function(err, res) {
    if (err) throw err;
    console.log("Number of documents inserted: " + res.insertedCount);
    db.close();
  });
});