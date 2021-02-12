import "package:flutter/material.dart";
import "screens/Login_screen.dart";
import "screens/Sign_Up.dart";
import "screens/Home_screnn.dart";
import "screens/Profile.dart";


void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        initialRoute: '/login',
        debugShowCheckedModeBanner: false,
        routes: {
          '/': (context) => HomePage(),
        '/login': (context) => LoginPage(),
        '/signup':(context) => SignupPage(),
          '/profile':(context)=>ProfilePage(),
          },
    );
    }
}