//import 'package:flutter/material.dart';
// import 'package:google_maps_flutter/google_maps_flutter.dart';
// import 'package:permission_handler/permission_handler.dart';

// Gmaps
// void main() => runApp(MyApp());

// class MyApp extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return const MaterialApp(
//       home: MyMapScreen(),
//     );
//   }
// }

// class MyMapScreen extends StatefulWidget {
//   const MyMapScreen({Key? key}) : super(key: key);

//   @override
//   _MyMapScreenState createState() => _MyMapScreenState();
// }

// class _MyMapScreenState extends State<MyMapScreen> {
//   GoogleMapController? mapController;
//   static const LatLng _kMapCenter =
//       const LatLng(-6.970439057048023, 107.65600083402336);

//   @override
//   void initState() {
//     super.initState();
//     _requestGpsPermission();
//   }

//   Future<void> _requestGpsPermission() async {
//     final status = await Permission.locationWhenInUse.request();
//     if (status.isGranted) {
//       // Permission granted
//     } else if (status.isDenied) {
//       // Permission denied
//     } else if (status.isPermanentlyDenied) {
//       openAppSettings();
//     }
//   }

//   Set<Marker> _createMarkers() {
//     return {
//       const Marker(
//         markerId: MarkerId("marker_1"),
//         position: _kMapCenter,
//         infoWindow: InfoWindow(title: 'Marker 1'),
//         rotation: 90,
//       ),
//       const Marker(
//         markerId: MarkerId("marker_2"),
//         position: LatLng(-6.9733165, 107.6281415),
//       ),
//     };
//   }

//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: const Text('Map 1301204188 - Akmal Muhamad Firdaus'),
//       ),
//       body: GoogleMap(
//         onMapCreated: (controller) {
//           setState(() {
//             mapController = controller;
//           });
//         },
//         initialCameraPosition: const CameraPosition(
//           target: _kMapCenter,
//           zoom: 15.0,
//         ),
//         myLocationEnabled: true,
//         markers: _createMarkers(),
//       ),
//     );
//   }
// }

// place picker
// import 'package:place_picker/place_picker.dart';

// void main() => runApp(MyApp());

// class MyApp extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return MaterialApp(
//       home: PickerDemo(),
//     );
//   }
// }

// class PickerDemo extends StatefulWidget {
//   @override
//   State<StatefulWidget> createState() => PickerDemoState();
// }

// class PickerDemoState extends State<PickerDemo> {
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(title: const Text('1301204188 - Akmal Muhamad Firdaus')),
//       body: Center(
//         child: ElevatedButton(
//           child: const Text("Pick location"),
//           onPressed: () {
//             showPlacePicker();
//           },
//         ),
//       ),
//     );
//   }

//   void showPlacePicker() async {
//     LocationResult? result = await Navigator.of(context).push(MaterialPageRoute(
//         builder: (context) =>
//             PlacePicker("AIzaSyCvKnYMOyV6hIuqSMq0-74JRvONGrLG_Xk")));

//     // Handle the result in your way
//     print(result);
//   }
// }

// Camera API
// import 'dart:async';
// import 'package:camera/camera.dart';
// import 'package:flutter/material.dart';

// List<CameraDescription> cameras = [];

// Future<void> main() async {
//   WidgetsFlutterBinding.ensureInitialized();
//   cameras = await availableCameras();
//   runApp(CameraApp());
// }

// class CameraApp extends StatefulWidget {
//   @override
//   _CameraAppState createState() => _CameraAppState();
// }

// class _CameraAppState extends State<CameraApp> {
//   late CameraController controller;
//   @override
//   void initState() {
//     super.initState();
//     controller = CameraController(cameras[0], ResolutionPreset.max);
//     controller.initialize().then((_) {
//       if (!mounted) {
//         return;
//       }
//       setState(() {});
//     });
//   }

//   @override
//   void dispose() {
//     controller.dispose();
//     super.dispose();
//   }

//   @override
//   Widget build(BuildContext context) {
//     if (!controller.value.isInitialized) {
//       return Container();
//     }
//     return MaterialApp(
//       home: CameraPreview(controller),
//     );
//   }
// }

//Media API
import 'dart:io';
import 'package:flutter/material.dart';
import 'package:image_picker/image_picker.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      home: ImageFromGalleryEx(ImageSource.camera),
    );
  }
}

class ImageFromGalleryEx extends StatefulWidget {
  final type;
  const ImageFromGalleryEx(this.type, {super.key});
  @override
  ImageFromGalleryExState createState() => ImageFromGalleryExState(type);
}

class ImageFromGalleryExState extends State<ImageFromGalleryEx> {
  var _image;
  var imagePicker;
  var type;
  ImageFromGalleryExState(this.type);
  @override
  void initState() {
    super.initState();
    imagePicker = ImagePicker();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text("1301204188 - Akmal Muhamad Firdaus")),
      body: Column(
        children: <Widget>[
          const SizedBox(
            height: 52,
          ),
          Center(
            child: GestureDetector(
              onTap: () async {
                var source = type == ImageSource.camera
                    ? ImageSource.camera
                    : ImageSource.gallery;
                XFile image = await imagePicker.pickImage(
                    source: source,
                    imageQuality: 50,
                    preferredCameraDevice: CameraDevice.front);
                setState(() {
                  _image = File(image.path);
                });
              },
              child: Container(
                width: 200,
                height: 200,
                decoration: BoxDecoration(color: Colors.red[200]),
                child: _image != null
                    ? Image.file(
                        _image,
                        width: 200.0,
                        height: 200.0,
                        fit: BoxFit.fitHeight,
                      )
                    : Container(
                        decoration: BoxDecoration(color: Colors.red[200]),
                        width: 200,
                        height: 200,
                        child: Icon(
                          Icons.camera_alt,
                          color: Colors.grey[800],
                        ),
                      ),
              ),
            ),
          )
        ],
      ),
    );
  }
}
