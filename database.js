var db = openDatabase("APP", "1.0", "CoffeeCounter", (5 * 1024 * 1024));
db.transaction(function (tx) {
  tx.executeSql("CREATE TABLE IF NOT EXISTS counter (id, user, count)", 
      [ ], successCallback, errorCallback);
  tx.executeSql("INSERT INTO counter (id, user, count) VALUES(?,?,?)", 
      [1,"username",0], function(){}, errorCallback);
});

db.transaction(function (tx) {
  tx.executeSql("SELECT user, count FROM counter WHERE id = ?", [1], 
    function(data){
      console.log(data.user + " vypil " + data.count + " kavy.");
  }, errorCallback);
});
