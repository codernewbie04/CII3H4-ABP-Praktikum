import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'model/Counter.dart';
import 'model/Album.dart';
import 'dart:convert';
// import 'package:flutter_local_notifications/flutter_local_notifications.dart';

import 'package:http/http.dart' as http;

void main() {
  runApp(MyApp());
}

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  List<String> data = [];

  Future<Album> fetchAlbum() async {
    final response = await http
        .get(Uri.parse('https://jsonplaceholder.typicode.com/albums/1'));
    if (response.statusCode == 200) {
      Album data = Album.fromJson(jsonDecode(response.body));
      print('Behrasil request: ${data.id}, ${data.title}, ${data.userId}');
      return Album.fromJson(jsonDecode(response.body));
    } else {
      throw Exception('Failed to load album');
    }
  }

  Future<http.Response> deleteAlbum(String id) async {
    final http.Response response = await http.delete(
      Uri.parse('https://jsonplaceholder.typicode.com/albums/$id'),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
      },
    );

    if (response.statusCode == 200) {
      print('Berhasil delete');
      return response;
    } else {
      throw Exception('Failed to load album');
    }
  }

  Future<http.Response> createAlbum(String title) async {
    final http.Response response = await http.post(
      Uri.parse('https://jsonplaceholder.typicode.com/albums'),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
      },
      body: jsonEncode(<String, String>{
        'title': title,
      }),
    );
    print("Data from create album ${response.body}");
    return response;
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: Text('Akmal Muhamad Firdaus - 1301204188'),
        ),
        body: Center(
          child: Column(
            children: [
              ElevatedButton(
                onPressed: fetchAlbum,
                child: Text('Fetch Data'),
              ),
              SizedBox(height: 10),
              ElevatedButton(
                onPressed: () {
                  deleteAlbum("3");
                },
                child: const Text('Delete Data'),
              ),
              SizedBox(height: 10),
              ElevatedButton(
                onPressed: () {
                  createAlbum("Akmal Muhamad Firdaus");
                },
                child: const Text('Create Data'),
              )
            ],
          ),
        ),
      ),
    );
  }
}



// void main() {
//   runApp(
//     ChangeNotifierProvider(
//       create: (context) => CounterNotifier(),
//       child: MyApp(),
//     ),
//   );
// }

// class CounterNotifier extends ChangeNotifier {
//   Counter counter = Counter();

//   void incrementCounter() {
//     counter.increment();
//     notifyListeners();
//   }
// }

// class MyApp extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return MaterialApp(
//       title: 'Counter App',
//       theme: ThemeData(
//         primarySwatch: Colors.blue,
//       ),
//       home: CounterWidget(),
//     );
//   }
// }

// class CounterWidget extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     final counterNotifier = Provider.of<CounterNotifier>(context);

//     return Scaffold(
//       appBar: AppBar(
//         title: Text('Akmal Muhamad Firdaus - 1301204188'),
//       ),
//       body: Center(
//         child: Column(
//           mainAxisAlignment: MainAxisAlignment.center,
//           children: [
//             Text(
//               'Counter Value: ${counterNotifier.counter.value}',
//               style: TextStyle(fontSize: 24),
//             ),
//             SizedBox(height: 16),
//             ElevatedButton(
//               onPressed: () {
//                 counterNotifier.incrementCounter();
//               },
//               child: Text('Increment'),
//             ),
//           ],
//         ),
//       ),
//     );
//   }
// }


// final FlutterLocalNotificationsPlugin flutterLocalNotificationsPlugin =
//     FlutterLocalNotificationsPlugin();
// Future<void> main() async {
//   WidgetsFlutterBinding.ensureInitialized();
//   await flutterLocalNotificationsPlugin.initialize(
//     InitializationSettings(
//       android: const AndroidInitializationSettings('@mipmap/ic_launcher'),
//     ),
//   );
//   runApp(MaterialApp(home: Halaman1()));
// }

// Future<void> showNotification() async {
//   var s = 'your_channel_description';
//   var androidPlatformChannelSpecifics = AndroidNotificationDetails(
//     'ID_Channel_Test_Notifikasi',
//     'Nama_Channel_Test_Notifikasi',
//     importance: Importance.max,
//     priority: Priority.high,
//   );

//   var platformChannelSpecifics =
//       NotificationDetails(android: androidPlatformChannelSpecifics);

//   await flutterLocalNotificationsPlugin.show(
//     0,
//     'Test notifikasi',
//     'Akmal Muhamad Firdaus - 1301204188',
//     platformChannelSpecifics,
//   );
// }

// class Halaman1 extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: Text('Halaman 1 - 1301204188'),
//       ),
//       body: Center(
//         child: ElevatedButton(
//           child: Text('Tampilkan Notifikasi'),
//           onPressed: () {
//             showNotification();
//           },
//         ),
//       ),
//     );
//   }
// }
