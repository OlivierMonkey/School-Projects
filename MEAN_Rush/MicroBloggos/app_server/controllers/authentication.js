var User = require('../models/users'); 

exports.register = function(req, res){
    if(!req.body.name) {
        res.status(400).json({success: false, message: 'You must provide a name'});
    } else {
        if (!req.body.email){
            res.status(400).json({success: false, message: 'You must provide an email'});
        } else {
            if (!req.body.password){
                res.status(400).json({success: false, message: 'You must provide a password'});
        } else {
            let user = new User({
                name: req.body.name,
                email: req.body.email,
                password: req.body.password
                });
            user.save((err) => {
                if (err) {
                    res.status(400).json({ success: false, message: 'Could not save user. Error: ', err});
                } else {
                    res.json({ success: true, message: 'User saved!'});
                    }
                });
            }   
        }
    }
};

exports.login = function(req, res){
    if (!req.body.name) {
        res.json({ success: false, message: "No username was provided"});
    } else {
        if (!req.body.password) {
            res.json({ success: false, message: "No password was provided"});
            } else {
                User.findOne({ name: req.body.name}, (err, user) => {
                    if (err) {
                        res.json({ success: false, message: err });
                    } else {
                        if (!user) {
                            res.json({ success: false, message: "Name not found"});
                        } else {
                            const validPassword = user.comparePassword(req.body.password, function(err, isMatch) {
                            if (isMatch){
                                res.json({ success: true, message: 'Success!'});
                            }
                            else {
                                res.status(400).json({ success: false, message: "Password Invalid"});
                            }
                        });
                    }
                }
            });
        }
    }
};