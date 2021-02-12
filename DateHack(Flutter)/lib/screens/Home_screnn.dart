import 'dart:io';

import 'package:flutter/material.dart';
import 'package:carousel_slider/carousel_slider.dart';

import "MatchCard.dart";

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
                  color: Colors.purpleAccent
              ),
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
                Navigator.pushNamed(context, '/profile');

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

      body:CarouselSlider(

            options: CarouselOptions(height: 600.0),

            items: [1,2,3,4,5].map((i) {
              return Builder(

                builder: (BuildContext context) {

                  return Container(
                      width: MediaQuery.of(context).size.width,
                      margin: EdgeInsets.only(left: 0, top:50, right: 0, bottom:0),
                      alignment: Alignment.center,
                      decoration: BoxDecoration(
                          color: Colors.white24
                      ),
                      child:new Image.asset("assets/images/Datemandu.png"),

                      // Text('text $i', style: TextStyle(fontSize: 16.0),)
                  );
                },
              );
            }).toList(),

          ),


      bottomNavigationBar: BottomNavigationBar(

        items: [
          BottomNavigationBarItem(
            icon: Icon(Icons.home,color: Color(0xFFAD1457),),
            title: Text('Home',style: TextStyle(
              color: Color(0xFFAD1457),
            ),),
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.message),
            title: Text('Message'),
          ),
        ],
      ),
       );
  }

}
