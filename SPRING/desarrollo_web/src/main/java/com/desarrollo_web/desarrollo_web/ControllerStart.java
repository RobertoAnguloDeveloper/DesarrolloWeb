package com.desarrollo_web.desarrollo_web;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class ControllerStart {

    @GetMapping("/")
    public String start() {
        return "Hola Mundo";
    }
}
