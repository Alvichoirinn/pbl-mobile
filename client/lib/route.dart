import 'package:client/screens/home_screen.dart';
// import 'package:client/screens/login_screen.dart';
import 'package:client/screens/lupa_password.dart';
import 'package:client/screens/ubah_password.dart';
import 'package:go_router/go_router.dart';

final GoRouter router = GoRouter(
  initialLocation: "/ubah_password",
  redirect: (context, state) {
    return;
  },
  routes: [
    GoRoute(
      path: "/",
      name: "home",
      builder: (context, state) => const HomeScreen(),
    ),
    GoRoute(
      path: "/lupa_password",
      name: "lupa_password",
      builder: (context, state) => const ForgotPasswordPage(),
    ),
    GoRoute(
      path: "/ubah_password",
      name: "ubah_password",
      builder: (context, state) => const UpdatePasswordPage(),
    ),
  ],
);
