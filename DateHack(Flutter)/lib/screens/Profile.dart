import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:carousel_slider/carousel_slider.dart';
import 'dart:io';

class ProfilePage extends StatefulWidget {
  @override
  _ProfilePageState createState() => _ProfilePageState();
}

class _ProfilePageState extends State<ProfilePage> {

  @override
  void initState() {
    SystemChrome.setEnabledSystemUIOverlays([]);
    super.initState();
  }

  @override
  Widget build(BuildContext context) {

    return MaterialApp(
      title: 'Profile',
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
                    color: Colors.purpleAccent
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
            child: const Text('Profile'),
          ),
        ),
      body: ListView(
        children: <Widget>[
          Container(
            height: 250,
            decoration: BoxDecoration(
                color: Color(0xFFAD1457),

            ),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceAround,
              children: <Widget>[
                CircleAvatar(
                  backgroundColor: Colors.red.shade300,
                  minRadius: 30.0,
                  child: Icon(
                    Icons.close,
                    size: 25.0,
                  ),
                ),
                CircleAvatar(
                    backgroundColor: Colors.white70,
                    maxRadius: 60.0,
                    child:Icon( Icons.person_sharp, size: 50.0,)


                ),
                CircleAvatar(
                  backgroundColor: Colors.red.shade300,
                  minRadius: 30.0,
                  child: Icon(
                    Icons.check_circle_rounded,
                    size: 25.0,
                  ),
                ),
              ],
            ),
            SizedBox(
              height: 10,
            ),
            Text(
              'Other User',
              style: TextStyle(
                fontSize: 30,
                fontWeight: FontWeight.bold,
                color: Colors.white,
              ),
            ),
            Text(
              '29 years old',
              style: TextStyle(
                color: Colors.white,
                fontSize: 22,
              ),
            ),
          ],
        ),
      ),
          Container(
            child: Column(
              children: <Widget>[
                ListTile(
                  title: Text(
                    'Description',
                    style: TextStyle(
                      color: Colors.deepOrange,
                      fontSize: 20,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  subtitle:Text(
                    'Wanderer, Hala Madrid',
                    style: TextStyle(
                      color: Colors.black87,
                      fontSize: 20,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  ),

                Divider(),
                ListTile(
                  title: Text(
                    'More Photos',
                    style: TextStyle(
                      color: Colors.deepOrange,
                      fontSize: 20,
                      fontWeight: FontWeight.bold,
                    ),
                  )
                ),
                Divider(),
                ListTile(

                  title: new Image.asset("assets/images/simba.jpg"),

                  ),
                Divider(),
                ListTile(

                  subtitle:  new Image.asset("assets/images/astranout.jpg"),
                ),
              ],
            ),
          )
        ],
      ),
      ),
    );

  }
}
