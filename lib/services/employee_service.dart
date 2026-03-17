import 'dart:convert';
import 'dart:developer' as developer;
import 'package:http/http.dart' as http;
import '../models/employee.dart';

class EmployeeService {
  // 10.0.2.2 for Android emulator, localhost for web/desktop or machine's IP when running on a physical device.
  static const String _baseUrl = 'http://10.0.2.2:8000/api';

  Future<List<Employee>> fetchEmployees() async {
    final response = await http.get(Uri.parse('$_baseUrl/employees'));

    developer.log(response.body, name: 'EmployeeService.fetchEmployees');

    if (response.statusCode == 200) {
      final List<dynamic> data = jsonDecode(response.body)['data'];
      return data.map((json) => Employee.fromJson(json)).toList();
    }

    throw Exception('Failed to load employees (${response.statusCode})');
  }
}
