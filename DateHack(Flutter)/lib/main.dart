import "package:flutter/material.dart";
import "screens/Login_screen.dart";
import "screens/Sign_Up.dart";
import "screens/Home_screnn.dart";
import "screens/Profile.dart";
import "screens/User_profile.dart";
import "screens/messages.dart";


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
          '/User-profile':(context)=>UserProfilePage(),
          '/message':(context)=>MessagesPage(),
          },
    );
    }
}