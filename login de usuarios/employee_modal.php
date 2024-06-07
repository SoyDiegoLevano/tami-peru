<div class="modal" id="addnew">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center"><b>Agregar Practicante</b></h4>
      </div>
      <div class="modal-body modal-tamanio">
        <form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="photo" class="col-sm-5 control-label">Foto del practicante</label>

            <div class="col-sm-7">
              <input type="file" name="photo" id="photo">
            </div>
          </div>

          <div class="form-group">
            <label for="date_in" class="col-sm-1 control-label">Fecha Ingreso</label>
            <div class="col-sm-3">
              <input type="date" class="form-control" id="date_in" name="date_in" required>
            </div>

            <label for="date_out" class="col-sm-1 control-label">Fecha Salida</label>
            <div class="col-sm-3">
              <input type="date" class="form-control" id="date_out" name="date_out" required>
            </div>
            <label for="time_practice" class="col-sm-1 control-label">Tiempo </label>

            <div class="col-sm-3">
              <select class="form-control" name="time_practice" id="time_practice" required>
                <option value="" selected>- Seleccionar -</option>
                <option value="3">3 meses</option>
                <option value="5">5 meses</option>
              </select>
            </div>

          </div>
          <div class="form-group">

            <label for="type_practice" class="col-sm-1 control-label">Tipo </label>

            <div class="col-sm-3">
              <select class="form-control" name="type_practice" id="type_practice" required>
                <option value="" selected>- Seleccionar -</option>
                <option value="PREPROFESIONALES">PREPROFESIONALES</option>
                <option value="PROFESIONALES">PROFESIONALES</option>
              </select>
            </div>
            <label for="dni" class="col-sm-1 control-label">DNI</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <label for="contact" class="col-sm-1 control-label">Celular</label>

            <div class="col-sm-3">
              <input type="text" class="form-control" id="contact" name="contact">
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-1 control-label">Nombre</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <label for="lastname" class="col-sm-1 control-label">Apellido</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <label for="gender" class="col-sm-1 control-label">Género</label>
            <div class="col-sm-3">
              <select class="form-control" name="gender" id="gender" required>
                <option value="" selected>- Seleccionar -</option>
                <option value="Male">Hombre</option>
                <option value="Female">Mujer</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="birthday" class="col-sm-2 control-label">Cumpleaños</label>
            <div class="col-sm-3">
              <input type="date" class="form-control" id="birthday" name="birthday" required>
            </div>
            <label for="address" class="col-sm-2 control-label">Dirección</label>

            <div class="col-sm-5">
              <textarea class="form-control" name="address" id="address"></textarea>
            </div>


          </div>
          <div class="form-group">
            <label for="personal_email" class="col-sm-2 control-label">Correo Personal</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="personal_email" name="personal_email" required>
            </div>

            <label for="institutional_email" class="col-sm-2 control-label">Correo Institucional</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="institutional_email" name="institutional_email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="university" class="col-sm-2 control-label">Universidad</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="university" name="university" required>
            </div>

            <label for="career" class="col-sm-2 control-label">Carrera</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="career" name="career" required>
            </div>
          </div>

          <div class="form-group">
            <label for="negocio" class="col-sm-2 control-label">Unidad de Negocio</label>

            <div class="col-sm-4">
              <select class="form-control" name="negocio" id="negocio" required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sql = "SELECT * FROM negocio";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                  echo "
                              <option value='" . $prow['id'] . "'>" . $prow['nombre_negocio'] . "</option>
                            ";
                }
                ?>
              </select>
            </div>
            <label for="position" class="col-sm-2 control-label">Cargo</label>

            <div class="col-sm-4">
              <select class="form-control" name="position" id="position" required>
                <option value="" selected>- Seleccionar -</option>
                <?php
                $sql = "SELECT * FROM position";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                  echo "
                              <option value='" . $prow['id'] . "'>" . $prow['description'] . "</option>
                            ";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="schedule" class="col-sm-3 control-label">Horario semanal</label>
            <div class="col-sm-9">
              <div class="row" style="margin-bottom: 10px;">
                <div class="col-sm-3">&nbsp;</div>
                <div class="col-sm-4">Entrada</div>
                <div class="col-sm-4">Salida</div>
              </div>
              <div class="row" style="margin-bottom: 10px;">

                <div class="col-sm-4">
                  <select class="form-control" id="time_in_select" onchange="updateScheduleOut(this)">
                    <option value="" selected>- Seleccionar -</option>
                    <?php
                    $sql = "SELECT * FROM schedules";
                    $query = $conn->query($sql);
                    while ($srow = $query->fetch_assoc()): ?>
                      <option value="<?= $srow['id'] ?>">
                        <?= $srow['time_in'] ?>
                      </option>
                    <?php endwhile; ?>
                    <option value="Personalizado">Personalizado</option>
                  </select>
                </div>
                <div class="col-sm-4">
                  <select class="form-control" id="time_out_select" onchange="updateScheduleIn(this)">
                    <option value="" selected>- Seleccionar -</option>
                    <?php
                    $query->data_seek(0);
                    while ($srow = $query->fetch_assoc()): ?>
                      <option value="<?= $srow['id'] ?>">
                        <?= $srow['time_out'] ?>
                      </option>
                    <?php endwhile; ?>
                    <option value="Personalizado">Personalizado</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Cerrar</button>
        <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>