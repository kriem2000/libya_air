import 'package:flutter/material.dart';
import 'package:flutter_svg/svg.dart';
import 'create_account.dart';
import 'forgot_password.dart';
import 'home_screen.dart';

class LoginScreen extends StatefulWidget {
  @override
  _LoginScreen createState() => _LoginScreen();
}

class _LoginScreen extends State<LoginScreen> {
  bool showSpinner = false;
  late String email;
  late String password;

  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
        backgroundColor: Colors.white,
        body: SafeArea(
          child: Container(
            padding: EdgeInsets.all((15)),
            child: SingleChildScrollView(
              child: Column(
                  mainAxisAlignment: MainAxisAlignment.start,
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    Center(
                      child: SizedBox(
                          width: 500,
                          height: 300,
                          child: Image.asset('images/Trip-pana.png')),
                    ), //#5DADE2
                    const Padding(
                      padding: EdgeInsets.fromLTRB(20, 5, 20, 8),
                      child: Text(
                        "It's Time To Travel",
                        style: TextStyle(
                            color: Color.fromARGB(255, 129, 194, 248),
                            fontWeight: FontWeight.w600,
                            fontSize: 20),
                      ),
                    ),
                    const Padding(
                      padding: EdgeInsets.symmetric(horizontal: 20.0),
                      child: Text(
                        'Please sign in to continue.',
                        style: TextStyle(
                            color: Color.fromARGB(255, 129, 194, 248),
                            fontWeight: FontWeight.w400,
                            fontSize: 13),
                      ),
                    ),
                    Container(
                      margin:
                          EdgeInsets.symmetric(vertical: 10, horizontal: 20),
                      child: Column(
                          crossAxisAlignment: CrossAxisAlignment.start,
                          children: const <Widget>[
                            Text(
                              'E-mail',
                              style: TextStyle(
                                  fontWeight: FontWeight.w400,
                                  fontSize: 13,
                                  color: Colors.grey),
                            ),
                            SizedBox(
                              height: 10,
                            ),
                            Material(
                              elevation: 3,
                              child: TextField(
                                style: (TextStyle(
                                    color: Colors.grey,
                                    fontWeight: FontWeight.w400)),
                                keyboardType: TextInputType.emailAddress,
                                cursorColor: Colors.grey,
                                obscureText: false,
                                decoration: InputDecoration(
                                  border: InputBorder.none,
                                  fillColor: Colors.white,
                                  filled: true,
                                  prefixIcon: Icon(Icons.email),
                                  focusedBorder: OutlineInputBorder(
                                    borderSide: BorderSide(
                                        color: Colors.blueGrey, width: 1.0),
                                  ),
                                ),
                                /* onChanged: (value) {
                              email = value;
                            },*/
                              ),
                            ),
                          ]),
                    ),
                    Container(
                      margin:
                          EdgeInsets.symmetric(vertical: 10, horizontal: 20),
                      child: Column(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: <Widget>[
                          const Text(
                            'Password',
                            style: TextStyle(
                                fontWeight: FontWeight.w300,
                                fontSize: 13,
                                color: Colors.grey),
                          ),
                          const SizedBox(
                            height: 10,
                          ),
                          Material(
                            elevation: 3,
                            child: TextField(
                              style: (const TextStyle(
                                  color: Colors.grey,
                                  fontWeight: FontWeight.w400)),
                              obscureText: true,
                              cursorColor: Colors.white,
                              decoration: const InputDecoration(
                                border: InputBorder.none,
                                fillColor: Colors.white,
                                filled: true,
                                prefixIcon: Icon(Icons.lock),
                                focusedBorder: OutlineInputBorder(
                                  borderSide: BorderSide(
                                      color: Color.fromARGB(255, 50, 79, 103),
                                      width: 1.0),
                                ),
                              ),
                              onChanged: (value) {
                                password = value;
                              },
                            ),
                          ),
                        ],
                      ),
                    ),
                    Container(
                      margin: EdgeInsets.only(
                          right: 50, left: 50, top: 20, bottom: 10),
                      child: Center(
                        child: Row(
                          children: [
                            Expanded(
                                child: ElevatedButton(
                              onPressed: () => {
                                Navigator.push(context,
                                    MaterialPageRoute(builder: (context) {
                                  return HomeScreen();
                                }))
                              },
                              child: Text('Login'),
                              style: ElevatedButton.styleFrom(
                                  primary: Color.fromARGB(255, 14, 98, 167)),
                            ))
                          ],
                        ),
                      ),
                    ),
                    const SizedBox(
                      width: 25,
                      height: 25,
                    ),
                    Container(
                      margin: EdgeInsets.only(
                          right: 90, left: 90, top: 20, bottom: 10),
                      child: Column(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: [
                            FlatButton(
                              onPressed: () => {
                                Navigator.push(context,
                                    MaterialPageRoute(builder: (context) {
                                  return ForgotPassword();
                                }))
                              },
                              child: const Text(
                                'Forgot Password?',
                                style: TextStyle(
                                    color: Color.fromARGB(255, 129, 194, 248)),
                              ),
                            ),
                            FlatButton(
                                onPressed: () => {
                                      Navigator.push(context,
                                          MaterialPageRoute(builder: (context) {
                                        return CreateAccount();
                                      }))
                                    },
                                padding: EdgeInsets.symmetric(horizontal: 20.0),
                                child: Text(
                                  'Dont have an account?',
                                  style: TextStyle(
                                      color: Color.fromARGB(255, 129, 194, 248),
                                      fontWeight: FontWeight.w500),
                                )),
                          ]),
                    )
                  ]),
            ),
          ),
        ));
  }
}
