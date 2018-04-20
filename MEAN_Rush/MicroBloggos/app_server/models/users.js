var mongoose = require('mongoose');
var bcrypt = require('bcrypt');
var SALT_WORK_FACTOR = 10;

var UserSchema = mongoose.Schema({
    name: {type: String, required: true, index: {unique: true } },
    email: {type: String, required: true, index: {unique: true} },
    password: {type: String, required: true}
  });

  UserSchema.pre('save', function(next) { 
    var user = this;

  if (!user.isModified('password')) return next();

  bcrypt.genSalt(SALT_WORK_FACTOR, function(err, salt){
    if (err) return next(err);

    bcrypt.hash(user.password, salt, function(err, hash) {
      if (err) return next(err);

      user.password = hash;
      next();
    });
  });

});

  UserSchema.methods.comparePassword = function(candidatePassword, cb){
    bcrypt.compare(candidatePassword, this.password, function(err, isMatch) {
      if (err) return cb(err);
      cb(null, isMatch);
    });
  };


// UserSchema.pre('save', function (next){ 
//   if (!this.isModified('password'))
//     return next();

//   bcrypt.hash(this.password, null, null, (err, hash) => {
//     if (err) return next(err);
//     this.password = hash;
//     next();
//   });
// });

// UserSchema.methods.comparePassword = function(password) {
//   return bcrypt.compareSync(password, this.password);
// };

module.exports = mongoose.model('user', UserSchema);
  
