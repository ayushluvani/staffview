import 'package:flutter/material.dart';
import 'package:flutter_test/flutter_test.dart';

import 'package:staffview/main.dart';

void main() {
  testWidgets('StaffView app renders', (WidgetTester tester) async {
    await tester.pumpWidget(const StaffViewApp());
  });
}
