import 'dart:convert';
import 'dart:io';
import 'package:flutter/material.dart';
import 'package:flutter_dotenv/flutter_dotenv.dart';
import 'package:http/http.dart' as http;
import 'package:vinyl_app/components/background.dart';
import 'package:vinyl_app/screens/home/home_screen.dart';
import 'package:vinyl_app/screens/register/register.dart';
import 'package:shared_preferences/shared_preferences.dart';



class LoginScreen extends StatefulWidget {
  @override
  _FormPageState createState() => _FormPageState();
}

class _FormPageState extends State<LoginScreen> {
  TextEditingController _email = TextEditingController();

  TextEditingController _password = TextEditingController();

  final GlobalKey<FormState> _formkey = GlobalKey<FormState>();

  @override
  Widget build(BuildContext context) {
    Size size = MediaQuery.of(context).size;

    return Scaffold(
      body: SingleChildScrollView(
        child: Background(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Container(
                alignment: Alignment.centerLeft,
                padding: EdgeInsets.symmetric(horizontal: 40),
                child: Text(
                  "LOGIN",
                  style: TextStyle(
                      fontWeight: FontWeight.bold,
                      color: Colors.red[500],
                      fontSize: 36),
                  textAlign: TextAlign.left,
                ),
              ),
              SizedBox(height: size.height * 0.03),
              Container(
                alignment: Alignment.center,
                margin: EdgeInsets.symmetric(horizontal: 40),
                child: TextFormField(
                  controller: _email,
                  keyboardType: TextInputType.text,
                  decoration: InputDecoration(labelText: "Email"),
                  validator: (String value) {
                    if (value.isEmpty) {
                      return "Please enter your mail";
                    }
                    return null;
                  },
                  //onSaved(String name),
                ),
              ),
              SizedBox(height: size.height * 0.03),
              Container(
                alignment: Alignment.center,
                margin: EdgeInsets.symmetric(horizontal: 40),
                child: TextFormField(
                  controller: _password,
                  keyboardType: TextInputType.text,
                  decoration: InputDecoration(labelText: "Password"),
                  validator: (String value) {
                    if (value.isEmpty) {
                      return "Please enter a password";
                    }
                    return null;
                  },
                  //onSaved(String name),
                  obscureText: true,
                ),
              ),
              Container(
                alignment: Alignment.center,
                margin: EdgeInsets.symmetric(horizontal: 40, vertical: 10),
                child: Text(
                  "Forgot your password?",
                  style: TextStyle(fontSize: 12, color: Colors.black),
                ),
              ),
              SizedBox(height: size.height * 0.05),
              Container(
                alignment: Alignment.centerRight,
                margin: EdgeInsets.symmetric(horizontal: 40, vertical: 10),
                child: RaisedButton(
                  onPressed: () => {
                    LoginUser(),
                  },
                  shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(80.0)),
                  textColor: Colors.white,
                  padding: const EdgeInsets.all(0),
                  child: Container(
                    alignment: Alignment.center,
                    height: 50.0,
                    width: size.width * 0.5,
                    decoration: new BoxDecoration(
                        borderRadius: BorderRadius.circular(80.0),
                        gradient: new LinearGradient(colors: [
                          Color.fromARGB(255, 255, 45, 45),
                          Color.fromARGB(255, 180, 20, 25)
                        ])),
                    padding: const EdgeInsets.all(0),
                    child: Text(
                      "LOGIN",
                      textAlign: TextAlign.center,
                      style: TextStyle(fontWeight: FontWeight.bold),
                    ),
                  ),
                ),
              ),
              Container(
                alignment: Alignment.centerRight,
                margin: EdgeInsets.symmetric(horizontal: 40, vertical: 10),
                child: GestureDetector(
                  onTap: () => {
                    Navigator.push(
                        context,
                        MaterialPageRoute(
                            builder: (context) => RegisterScreen()))
                  },
                  child: Text(
                    "Don't Have an Account? Sign up",
                    style: TextStyle(
                        fontSize: 12,
                        fontWeight: FontWeight.bold,
                        color: Colors.black),
                  ),
                ),
              )
            ],
          ),
        ),
      ),
    );
  }
  var token;
  Future LoginUser() async {
    var APIURL = env["apiUrl"] + "/user/login"; // bizim link
    SharedPreferences prefs = await SharedPreferences.getInstance();
    Map maped = {
      'email': _email.text,
      'password': _password.text,
    };
    print("JSON DATA: ${maped}");


    http.Response response = await http.post(Uri.parse(APIURL), body: maped);

    var data = jsonDecode(response.body);
    print("DATA: ${data}");
    int status = response.statusCode;
    token = data["token"];

    if (response.statusCode == 200) {

      prefs.setString("token", data["token"]);

      Navigator.push(context, MaterialPageRoute(builder: (context) => HomeScreen()));

    } else {
      showDialog(
          context: context,
          builder: (_) => AlertDialog(
            title: Text("$status"),
            content: Text(data["message"]),
            actions: <Widget>[
              FlatButton(
                child: Text('Close!'),
                onPressed: () {
                  Navigator.of(context).pop();
                },
              )
            ],
          ));
    }
  }
}
