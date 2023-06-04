import 'package:flutter/material.dart';

class Halaman2 extends StatelessWidget {
  const Halaman2({Key? key, required this.title}) : super(key: key);
  final String title;
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('${title} - 1301204188'),
      ),
      body: Center(
        child: ElevatedButton(
          child: Text('Kembali ke Halaman 1'),
          onPressed: () {
            Navigator.pop(context);
          },
        ),
      ),
    );
  }
}
