import 'package:flutter/material.dart';
import 'screens/employee_list_screen.dart';

void main() => runApp(const StaffViewApp());

class StaffViewApp extends StatelessWidget {
  const StaffViewApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'StaffView',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        colorScheme: ColorScheme.fromSeed(seedColor: Colors.green),
        useMaterial3: true,
        fontFamily: 'Roboto',
      ),
      home: const EmployeeListScreen(),
    );
  }
}
