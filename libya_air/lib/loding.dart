import 'dart:async';
import 'package:flutter/material.dart';
import 'package:flutter_svg/flutter_svg.dart';
import 'login_screen.dart';

class LoadingScreen extends StatefulWidget {
  static String tag = '/QIBusSplash';

  @override
  LoadingScreenState createState() => LoadingScreenState();
}

class LoadingScreenState extends State<LoadingScreen> {
  @override
  void initState() {
    super.initState();
    startTime();
  }

  startTime() async {
    var _duration = Duration(seconds: 5);
    return Timer(_duration, navigationPage);
  }

  void navigationPage() {
    Navigator.push(
        context, MaterialPageRoute(builder: (context) => LoginScreen()));
  }

  @override
  Widget build(BuildContext context) {
    var width = MediaQuery.of(context).size.width;
    return Scaffold(
        body: SafeArea(
      child: Container(
        color: Colors.white,
        child: const Center(
          child: Image(
            image: AssetImage("images/3Z_2104.w026.n002.290B.p1.290.jpg"),
            height: 125.0,
            width: 125.0,
          ),
        ),
      ),
    ));
  }
}
