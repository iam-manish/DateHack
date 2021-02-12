import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:carousel_slider/carousel_slider.dart';
import 'dart:io';

class MessagesPage extends StatefulWidget {
  @override
  _MessagesPageState createState() => _MessagesPageState();
}

class _MessagesPageState extends State<MessagesPage> {

  @override
  void initState() {
    SystemChrome.setEnabledSystemUIOverlays([]);
    super.initState();
  }

  @override
  Widget build(BuildContext context) {

    return MaterialApp(
      title: 'Messages',
      home: Scaffold(
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
          title: Center(
            child: const Text('Messages'),
          ),
        ),
        body: ListView(
          children: <Widget>[
            Container(
              child: Column(
                children: <Widget>[
                  ListTile(
                    title: Text(
                      'Rabina Tara Singh',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),
                  ListTile(
                    title: Text(
                      'Rabina Tara Singh',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),
                  ListTile(
                    title: Text(
                      'Rabina Tara Singh',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),
                  ListTile(
                    title: Text(
                      'Rabina Tara Singh',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),
                  ListTile(
                    title: Text(
                      'Rabina Tara Singh',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),
                  ListTile(
                    title: Text(
                      'Rabina Tara Singh',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),
                  ListTile(
                    title: Text(
                      'Rabina Tara Singh',
                      style: TextStyle(
                        color:Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),
                  Divider(),
                  ListTile(
                    title: Text(
                      'Jasmine Poudel',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),
                  ListTile(
                    title: Text(
                      'Aditi Ojha',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),


                  Divider(),
                  ListTile(
                    title: Text(
                      'Aditya Jha',
                      style: TextStyle(
                        color: Color(0xFFAD1457),
                        fontSize: 20,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                  ),

                  Divider(),




            ],
             ),
            ),
          ],
        ),

      ),
    );

  }
}
