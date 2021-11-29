import 'package:flutter/material.dart';
import 'package:vinyl_app/constants.dart';

import '../../../constants.dart';
import '../../../constants.dart';
import 'filtered_product_list.dart';

class FilterPage extends StatefulWidget {
  @override
  _FilterPageState createState() => _FilterPageState();
}

class _FilterPageState extends State<FilterPage> {
  int _value ;
  int _min;
  int _max;
  RangeValues _currentRangeValues = const RangeValues(0, 1000);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar:AppBar(
        title: Text("Filters"),

      ),
      body:ListView(
        padding: EdgeInsets.only(top: kDefaultPadding, right:  kDefaultPadding, left: kDefaultPadding),
        children: <Widget> [

          Text("Price Range", style: TextStyle(fontSize: 20)),
          SizedBox(
            height: 10,
          ),

          Card(
            child: Container(
              child: RangeSlider(
                values: _currentRangeValues,
                min: 0,
                max: 4000,
                divisions: 5,
                labels: RangeLabels(
                  _currentRangeValues.start.round().toString(),
                  _currentRangeValues.end.round().toString(),
                ),
                onChanged: (RangeValues values) {
                  setState(() {
                    _currentRangeValues = values;
                  });
                },
              ),
            ),
          ),
          SizedBox(
            height: 20,
          ),
          TextButton(
            style: ButtonStyle(
              overlayColor: MaterialStateProperty.resolveWith<Color>(
                      (Set<MaterialState> states) {
                    if (states.contains(MaterialState.focused))
                      return Colors.red;
                    return null; // Defer to the widget's default.
                  }
              ),
            ),
            onPressed: () {
              Navigator.push(context,
                  MaterialPageRoute(builder: (context) => FilteredList(ranges: _currentRangeValues,)));
            },
            child: Text("Apply", style: TextStyle(fontSize: 20),),
          ),
          Text("Filter By",style: TextStyle(fontSize: 20)),

          SizedBox(
            height: 10,
          ),

          Card(

            child: Container(
              padding: EdgeInsets.all(20.0),
              child: DropdownButton(
                  value: _value,
                  items: [
                    DropdownMenuItem(
                      child: Text("Alphabetical"),
                      value: 1,
                    ),
                    DropdownMenuItem(
                      child: Text("Most Popular First"),
                      value: 2,
                    ),
                    DropdownMenuItem(
                        child: Text("Decreasing Price"),
                        value: 3
                    ),
                    DropdownMenuItem(
                        child: Text("Increasing Price"),
                        value: 4
                    )
                  ],
                  onChanged: (value) {
                    setState(() {
                      _value = value;
                      Navigator.push(context,
                          MaterialPageRoute(builder: (context) => FilteredList(value: _value,)));
                    });

                  },
                hint: Container(
                width: 150,                      //and here
                child: Text(
                  "Select a Filter",
                  style: TextStyle(color: Colors.grey),
                  textAlign: TextAlign.end,
                ),
              ),
                  ),

            ),
          ),


        ]
      ),
    );
  }




}


