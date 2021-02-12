import 'package:flutter/material.dart';
import 'package:flutter/services.dart';

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
        appBar: AppBar(
          backgroundColor: Colors.redAccent,
          title: Center(
            child: const Text('User Name'),
          ),
        ),
      body: ListView(
        children: <Widget>[
          Container(
            height: 250,
            decoration: BoxDecoration(
              gradient: LinearGradient(
                colors: [Colors.redAccent.shade200, Colors.deepOrange.shade700]
              ),
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
                    Icons.remove_circle,
                    size: 25.0,
                  ),
                ),
                CircleAvatar(
                  // backgroundColor: Colors.white70,
                  // maxRadius: 60.0,
                  // child: new Image.asset("assets/images/astranout.jpg"),
                  //   radius: 50.0,


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
              'User Name',
              style: TextStyle(
                fontSize: 30,
                fontWeight: FontWeight.bold,
                color: Colors.white,
              ),
            ),
            Text(
              '22 years old',
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
                  subtitle:Icon(
                    Icons.check_circle_rounded,
                    size: 25.0,
                  ),
                  ),

                Divider(),
                ListTile(
                  title: Text(
                    'social',
                    style: TextStyle(
                      color: Colors.deepOrange,
                      fontSize: 20,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  subtitle: Text(
                    'link',
                    style: TextStyle(
                      fontSize: 18,
                    ),
                  ),
                ),
                Divider(),
                ListTile(

                  title: new Image.asset("assets/images/simba.jpg"),
                  subtitle:  new Image.asset("assets/images/p!atd.jpg"),
                  ),
                Divider(),
                ListTile(
                  title: new Image.asset("assets/images/lake.jpg"),
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
