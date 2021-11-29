import 'package:flutter/material.dart';
import 'package:vinyl_app/screens/home/home_screen.dart';

class SuccessfulPurchase extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    Size size = MediaQuery.of(context).size;
    return SafeArea(
      child: Scaffold(
        body: Column(
          children: <Widget>[
            SizedBox(height: 70),
            Center(
              child: Image.asset(
                'assets/images/success.png',
                width: size.width * .30,
                fit: BoxFit.fill,
              ),
            ),
            Center(
              child: Padding(
                padding: const EdgeInsets.all(25.0),
                child: Text("Success!",
                    style: TextStyle(
                        color: Colors.black54,
                        fontSize: 24,
                        fontWeight: FontWeight.w800)),
              ),
            ),
            Center(
              child: Stack(
                children: <Widget>[
                  Align(
                    alignment: Alignment.center,
                    child: Container(
                      margin: const EdgeInsets.all(7.0),
                      padding: const EdgeInsets.all(30.0),
                      decoration: BoxDecoration(
                          border: Border.all(
                              color: const Color(0xffc1c1c1), width: 3),
                          borderRadius:
                          BorderRadius.all(Radius.circular(10.0))),
                      child: SelectableText(
                        "4671-0884-7276-4345-8709",
                        style: TextStyle(
                          color: Colors.black54,
                          fontSize: 18,
                          fontWeight: FontWeight.bold,
                        ),
                        textAlign: TextAlign.justify,
                      ),
                    ),
                  ),
                  Align(
                      alignment: Alignment.topCenter,
                      child: DecoratedBox(
                        decoration: BoxDecoration(color: Colors.white),
                        child: Text(' Purchase ID '),
                      )),
                ],
              ),
            ),
            Center(
              child: Padding(
                padding: const EdgeInsets.fromLTRB(85, 20, 85, 20),
                child: Text(
                    "Thank You for Your Purchase!",
                    style: TextStyle(color: Color(0xff063057), fontSize: 14),
                    textAlign: TextAlign.center),
              ),
            ),
            Padding(
              padding: const EdgeInsets.fromLTRB(50, 5, 50, 5),
              child: SizedBox(
                width: double.infinity,
                child: Column(
                  children: [
                    Row(children: [SizedBox(height: 10)],),

                  ],
                )
              ),
            ),
            SizedBox(height: 10),
            Align(
              alignment: Alignment.bottomCenter,
              child: Padding(
                  padding: const EdgeInsets.fromLTRB(50, 5, 50, 5),
                  child: SizedBox(
                      width: double.infinity,
                      child: blueButton("Return Home", () => {Navigator.push(context,
                          MaterialPageRoute(builder: (context) => HomeScreen()))}))),
            ),

          ],
        ),
      ),
    );
  }

}
// ignore: deprecated_member_use
RaisedButton blueButton(String label, Function fun) {
  return RaisedButton(
    onPressed: fun,
    textColor: Colors.white,
    color: Colors.red,
    padding: const EdgeInsets.all(15.0),
    child: Text(label),
    shape: RoundedRectangleBorder(
      borderRadius: BorderRadius.circular(15.0),
    ),
  );
}