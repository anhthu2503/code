var express = require('express');
var router = express.Router();
var authenticate = require('../middleware/auth');


const MongoClient = require('mongodb').MongoClient;

// Connection URL
const url = 'mongodb://localhost:27017';

const dbName = 'data_chat';

/* GET users listing. */
router.get('/', function(req, res, next) {
  // var a = 10 + 1;
  // var data = {
  //   data: "data"
  // };
  // res.json(data);

  MongoClient.connect(url, function(err, client) {
    if(err)
        console.log(err);

    const db = client.db(dbName);

    const collection_user = db.collection('movies');

    collection_user.find({
        // $and: [
        //     {
        //         thoi_luong: {
        //             //$lt: 100
        //             $gt: 100
        //         }
        //     },
        //     {
        //         noi_bat: 1
        //     }
        // ]
        // the_loai: {
        //     $all: [
        //         "hai",
        //         "lang_man"
        //     ]
        // }
        thoi_luong: {
            $gt: req.query.thoi_luong * 1 || 0
        }
    }).limit(10).toArray(function(err, ds_movie) {
        if(err)
            console.log(err);

        //console.log(ds_movie);

        res.json({'xu_ly': 'danh sach phim', 'data_send': ds_movie});

        client.close();
    });
  });

  // res.json({
  //   "data": "danh sach user" + JSON.stringify(req.query)
  // });

  //res.send('respond with a resource' + a);
});


module.exports = router;
