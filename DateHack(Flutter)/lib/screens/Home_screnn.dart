import 'dart:io';

import 'package:flutter/material.dart';
import 'swipe.dart';
import 'package:carousel_slider/carousel_slider.dart';


class HomePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color(0x000000),

      drawer: Drawer(
        child: Column(
          children: <Widget>[
            UserAccountsDrawerHeader(
              currentAccountPicture: CircleAvatar(
                backgroundColor: Colors.black,
                child: Icon(Icons.person,size: 50.0,),
              ),
              accountName: Text('Name'),
              accountEmail: Text('user@gmail.com'),
              decoration:BoxDecoration(
                  color: Colors.pinkAccent
              ),
            ),

            ListTile(
              leading: CircleAvatar(
                backgroundColor: Colors.grey,
                child: Icon(Icons.home,
                  color: Colors.black,
                  size: 30.0,
                ),
              ),
              title: Text("Home"),

              onTap: (){
                Navigator.pushNamed(context, '/');

              },
            ),
            ListTile(
              leading: CircleAvatar(
                backgroundColor: Colors.grey,
                child: Icon(Icons.message,
                  color: Colors.black,
                  size: 30.0,
                ),
              ),
              title: Text("Messages"),

              onTap: (){
                Navigator.pushNamed(context, '/message');

              },
            ),
            ListTile(
              leading: CircleAvatar(
                backgroundColor: Colors.grey,
                child: Icon(Icons.person_sharp,
                  color: Colors.black,
                  size: 30.0,
                ),
              ),
              title: Text("Profile"),

              onTap: (){
                Navigator.pushNamed(context, '/User-profile');

              },
            ),
            ListTile(
              leading: CircleAvatar(
                backgroundColor: Colors.grey,
                child: Icon(Icons.settings,
                  color: Colors.black,
                  size: 30.0,
                ),
              ),
              title: Text("Settings"),
              onTap: (){

              },
            ),
            Divider(),
            ListTile(
              leading: CircleAvatar(
                backgroundColor: Colors.grey,
                child: Icon(Icons.help_outline,
                  color: Colors.black,
                  size: 30.0,
                ),
              ),
              title: Text("About us"),
              onTap: (){
                Navigator.pushNamed(context, '/signup');
              },
            ),

            ListTile(
              leading: CircleAvatar(
                backgroundColor: Colors.grey,
                child: Icon(Icons.exit_to_app,
                  color: Colors.black,
                  size: 30.0,
                ),
              ),
              title: Text("Logout"),
              onTap: () {
                Navigator.pushNamed(context, '/login');
              },
            ),
          ],
        ),
      ),

      appBar: AppBar(
        backgroundColor: Color(0xFFAD1457),
        title: Text("DateMandu".toUpperCase()),
        centerTitle: true,
      ),
      //card corraussel
      body:
      SwipeFeedPage(),


       );
  }

}
