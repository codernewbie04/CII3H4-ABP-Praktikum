import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Akmal Muhamad Firdaus',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: MyHomePage(),
    );
  }
}

//Tab bar
// class MyHomePage extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return DefaultTabController(
//       length: 3, // Jumlah tab
//       child: Scaffold(
//         appBar: AppBar(
//           title: const Text('Tab Bar - Akmal Muhamad Firdaus'),
//           bottom: TabBar(
//             tabs: const [
//               Tab(icon: Icon(Icons.directions_car), text: 'Tab 1'),
//               Tab(icon: Icon(Icons.directions_transit), text: 'Tab 2'),
//               Tab(icon: Icon(Icons.directions_bike), text: 'Tab 2'),
//             ],
//           ),
//         ),
//         body: TabBarView(
//           children: const [
//             Center(
//               child: Text('Tab 1 Content'),
//             ),
//             Center(
//               child: Text('Tab 2 Content'),
//             ),
//             Center(
//               child: Text('Tab 3 Content'),
//             ),
//           ],
//         ),
//       ),
//     );
//   }
// }

// Bottom Navigation Bar
// class MyHomePage extends StatefulWidget {
//   @override
//   _MyHomePageState createState() => _MyHomePageState();
// }

// class _MyHomePageState extends State<MyHomePage> {
//   int _currentIndex = 0;

//   final List<Widget> _pages = [
//     Page1(),
//     Page2(),
//     Page3(),
//   ];

//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: Text('Bottom Navigation Bar - Akmal Muhamad Firdaus'),
//       ),
//       body: _pages[_currentIndex],
//       bottomNavigationBar: BottomNavigationBar(
//         currentIndex: _currentIndex,
//         onTap: (int index) {
//           setState(() {
//             _currentIndex = index;
//           });
//         },
//         items: [
//           BottomNavigationBarItem(
//             icon: Icon(Icons.home),
//             label: 'Home',
//           ),
//           BottomNavigationBarItem(
//             icon: Icon(Icons.search),
//             label: 'Search',
//           ),
//           BottomNavigationBarItem(
//             icon: Icon(Icons.person),
//             label: 'Profile',
//           ),
//         ],
//       ),
//     );
//   }
// }

// class Page1 extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return Center(
//       child: Text('Page 1'),
//     );
//   }
// }

// class Page2 extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return Center(
//       child: Text('Page 2'),
//     );
//   }
// }

// class Page3 extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return Center(
//       child: Text('Page 3'),
//     );
//   }
// }
// end Bottom Navigation Bar

//Elevated Button
// class MyHomePage extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: Text('ElevatedButton - Akmal Muhamad Firdaus'),
//       ),
//       body: Center(
//         child: ElevatedButton(
//           onPressed: () {
//             print('Button ditekan');
//           },
//           child: Text('Click Me'),
//         ),
//       ),
//     );
//   }
// }

//Text Button
// class MyHomePage extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: const Text('TextButton - Akmal Muhamad Firdaus'),
//       ),
//       body: Center(
//         child: TextButton(
//             child: const Text("menu"),
//             onPressed: () {
//               print("sukses");
//             }),
//       ),
//     );
//   }
// }

//Dropdown Button
class MyHomePage extends StatefulWidget {
  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  String? selectedOption;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('DropdownButton Akmal Muhamad Firdaus'),
      ),
      body: Center(
        child: DropdownButton<String>(
          value: selectedOption,
          onChanged: (String? newValue) {
            setState(() {
              selectedOption = newValue;
            });
          },
          items: <String>[
            'Pilihan 1',
            'Pilihan 2',
            'Pilihan 3',
            'Pilihan 4',
          ].map<DropdownMenuItem<String>>((String value) {
            return DropdownMenuItem<String>(
              value: value,
              child: Text(value),
            );
          }).toList(),
        ),
      ),
    );
  }
}
