import 'package:flutter/material.dart';
import 'package:vinyl_app/screens/checkout/checkout_screen.dart';

class AddressFormScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return AddressFormScreenState();
  }
}

class AddressFormScreenState extends State<AddressFormScreen> {
  String _addressName;
  String _address;


  final GlobalKey<FormState> _formKey = GlobalKey<FormState>();

  Widget _buildName() {
    return TextFormField(
      decoration: InputDecoration(labelText: 'Address Name'),
      maxLength: 10,
      validator: (String value) {
        if (value.isEmpty) {
          return 'Address Name is Required';
        }

        return null;
      },
      onSaved: (String value) {
        _addressName = value;
      },
    );
  }



  Widget _buildPassword() {
    return TextFormField(
      decoration: InputDecoration(labelText: 'Address'),
      //keyboardType: TextInputType.visiblePassword,
      validator: (String value) {
        if (value.isEmpty) {
          return 'Address is Required';
        }

        return null;
      },
      onSaved: (String value) {
        _address = value;
      },
    );
  }



  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text("Address Form")),
      body: SingleChildScrollView(
        child: Container(
          margin: EdgeInsets.all(24),
          child: Form(
            key: _formKey,
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: <Widget>[
                _buildName(),
                _buildPassword(),
                SizedBox(height: 100),
                RaisedButton(
                  child: Text(
                    'Submit',
                    style: TextStyle(color: Colors.blue, fontSize: 16),
                  ),
                  onPressed: () {
                    if (!_formKey.currentState.validate()) {
                      return;
                    }

                    _formKey.currentState.save();
                    Navigator.push(context,
                        MaterialPageRoute(builder: (context) => CheckoutScreen()));

                    print(_addressName);
                    print(_address);

                    //Send to API
                  },
                )
              ],
            ),
          ),
        ),
      ),
    );
  }
}