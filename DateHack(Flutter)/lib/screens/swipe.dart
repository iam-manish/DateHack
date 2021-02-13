import 'package:flutter/material.dart';
import 'cards_section_alignment.dart';
import 'cards_section_draggable.dart';

class SwipeFeedPage extends StatefulWidget {
  @override
  _SwipeFeedPageState createState() => _SwipeFeedPageState();
}

class _SwipeFeedPageState extends State<SwipeFeedPage> {
  bool showAlignmentCards = false;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        elevation: 0.0,
        centerTitle: true,
        backgroundColor: Colors.white,
      ),
      backgroundColor: Colors.white,
      body: Column(
        children: <Widget>[
          showAlignmentCards
              ? CardsSectionAlignment(context)
              : CardsSectionDraggable(),
                 buttonsRow()
        ],

      ),

    );
  }
  Widget buttonsRow() {
    return Container(
      margin: EdgeInsets.symmetric(vertical: 48.0),
      child: Row(
        mainAxisAlignment: MainAxisAlignment.center,
        crossAxisAlignment: CrossAxisAlignment.center,
        children: <Widget>[

          FloatingActionButton(
            heroTag: null,
            mini: true,
            onPressed: () {},
            backgroundColor: Colors.white,
            child: Icon(Icons.close, color: Colors.red,),

          ),
          SizedBox(
            width: 50,
          ),
          FloatingActionButton(
            heroTag: null,
            mini: true,
            onPressed: () {Navigator.pushNamed(context, '/profile');},
            backgroundColor: Colors.white,
            child: Icon(Icons.person_sharp, color: Colors.yellow),
          ),
          SizedBox(
            width: 50,
          ),
          FloatingActionButton(
            heroTag: null,
            mini: true,
            onPressed: () {},
            backgroundColor: Colors.white,
            child: Icon(Icons.person_add_alt, color: Colors.green),
          ),
        ],
      ),

    );
  }
}