import 'package:client/models/department_model.dart';
import 'package:client/services/base_service.dart';
import 'package:client/utils/api_wrapper.dart';

class DepartmentService extends BaseService {
  Future<ApiResponse<List<DepartmentModel>>> getDepartements() async {
    final response = await dio.get("/departements");

    final json = response.data;
    final rawDepartement = json["department"] as List;
    final departments = rawDepartement.map((item) {
      return DepartmentModel.fromJson(item);
    }).toList();

    return ApiResponse<List<DepartmentModel>>(
      message: json["message"],
      success: json["success"],
      data: departments,
      error: json["error"],
    );
  }
}
