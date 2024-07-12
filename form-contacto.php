<div id="contacto" class="container-flex ">
    <h3>Contacto</h3><br>
    <form action="https://formsubmit.co/a2add7ee209feedad0c5bc77a8d54377" method="POST">
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" autocapitalize="words" id="nombre" placeholder="Nombre" required>
        </div>

        <div class="mb-3">
            <label for="asunto" class="form-label">Asunto</label>
            <input type="text" name="subject" class="form-control" id="asunto" placeholder="asunto" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Nombre@Ejemplo.com" required>
        </div>

        <div class="form-floating" >
        <textarea class="form-control" id="mensaje" name="comments" required style="height: 100px" rows="3" placeholder="Escriba aqui su motivo de contacto..." ></textarea>
        <label for="floatingTextarea2">motivo de contacto</label>
        </div>

        <button type="submit" name="contact" class="btn btn-success mt-3">Enviar</button>

        <input type="hidden" name="_next" value="http://localhost/ejercicios/portafolio/index.php">
        <input type="hidden" name="_autoresponse" value="El mensaje ha sido enviado con exito, me comunicare a la brevedad con usted">
    </form>
</div>
<footer class="bd-footer py-4 py-md-5 mt-5 bd-body-tertiary">
<hr class=" text-white-50">
<style>
    #contacto{
        margin:100px;
    }
</style>