package com.desarrollo_web.desarrollo_web;

import java.util.Arrays;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.desarrollo_web.Persona;

import lombok.extern.slf4j.Slf4j;

@Controller
@Slf4j
public class ControllerStart {
    

    @GetMapping("/")
    public String start(Model model) {
        var mensaje = "HOLA con THYMELEAF";

        var persona = new Persona();
        persona.setNombre("Juan");
        persona.setApellido("Perez");
        persona.setEdad("30");
        persona.setEmail("hackertype@gmail.com");
        persona.setTelefono("123456789");
        persona.setDireccion("Calle falsa 123");
        persona.setCiudad("Ciudad falsa");

        var persona2 = new Persona();
        persona2.setNombre("Ana");
        persona2.setApellido("Martinez");
        persona2.setEdad("52");
        persona2.setEmail("hsedsfsdertype@gmail.com");
        persona2.setTelefono("8899899");
        persona2.setDireccion("Calle Casasd 154654");
        persona2.setCiudad("Ciudad Cartagena");

        var personas = Arrays.asList(persona, persona2);

        log.info("APLICANDO MVC");
        model.addAttribute("mensaje", mensaje);
        model.addAttribute("persona", persona);
        model.addAttribute("personas", personas);

        return "index";
    }
}
