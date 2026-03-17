class Employee {
  final int id;
  final String name;
  final String email;
  final DateTime joiningDate;
  final bool isActive;
  final bool isEligible;

  const Employee({
    required this.id,
    required this.name,
    required this.email,
    required this.joiningDate,
    required this.isActive,
    required this.isEligible,
  });

  factory Employee.fromJson(Map<String, dynamic> json) => Employee(
        id: json['id'] as int,
        name: json['name'] as String,
        email: json['email'] as String,
        joiningDate: DateTime.parse(json['joining_date'] as String),
        isActive: json['is_active'] as bool,
        isEligible: json['is_eligible'] as bool,
      );
}
