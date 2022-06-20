import 'package:flutter/material.dart';
import 'package:google_nav_bar/google_nav_bar.dart';

class HomeScreen extends StatefulWidget {
  @override
  _HomeScreen createState() => _HomeScreen();
}

class _HomeScreen extends State<HomeScreen> {
  get bottomNavigationBar => null;
  int selectedIndex = 0;
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return const Scaffold(
      body: SafeArea(
        child: Container(
          padding: EdgeInsets.all((15)),
          child: SingleChildScrollView(
            child: Column(
                mainAxisAlignment: MainAxisAlignment.start,
                crossAxisAlignment: CrossAxisAlignment.start,
                children: []),
          ),
        ),
      ),
    );
  }
}
