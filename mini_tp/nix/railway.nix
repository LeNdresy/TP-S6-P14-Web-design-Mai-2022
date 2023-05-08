{ pkgs ? import <nixpkgs> {} }:
let
  phpVersion = "8.0";
in {
  environment.systemPackages = with pkgs; [
    php${phpVersion}.extensions.redis
    php${phpVersion}.extensions.gd
  ];
}
