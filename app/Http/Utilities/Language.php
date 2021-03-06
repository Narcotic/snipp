<?php

namespace App\Http\Utilities;

class Language
{
    protected static $languages = ['1c' => '1c', 'actionscript' => 'actionscript', 'apache' => 'apache', 'applescript' => 'applescript', 'armasm' => 'armasm', 'asciidoc' => 'asciidoc', 'aspectj' => 'aspectj', 'autohotkey' => 'autohotkey', 'avrasm' => 'avrasm', 'axapta' => 'axapta', 'bash' => 'bash', 'brainfuck' => 'brainfuck', 'cal' => 'cal', 'capnproto' => 'capnproto', 'ceylon' => 'ceylon', 'clojure' => 'clojure', 'clojure-repl' => 'clojure-repl', 'cmake' => 'cmake', 'coffeescript' => 'coffeescript', 'cpp' => 'cpp', 'cs' => 'cs', 'css' => 'css', 'd' => 'd', 'markdown' => 'markdown', 'dart' => 'dart', 'delphi' => 'delphi', 'diff' => 'diff', 'django' => 'django', 'dns' => 'dns', 'dockerfile' => 'dockerfile', 'dos' => 'dos', 'dust' => 'dust', 'elixir' => 'elixir', 'ruby' => 'ruby', 'erb' => 'erb', 'erlang-repl' => 'erlang-repl', 'erlang' => 'erlang', 'fix' => 'fix', 'fortran' => 'fortran', 'fsharp' => 'fsharp', 'gcode' => 'gcode', 'gherkin' => 'gherkin', 'glsl' => 'glsl', 'go' => 'go', 'gradle' => 'gradle', 'groovy' => 'groovy', 'haml' => 'haml', 'handlebars' => 'handlebars', 'haskell' => 'haskell', 'haxe' => 'haxe', 'http' => 'http', 'inform7' => 'inform7', 'ini' => 'ini', 'java' => 'java', 'javascript' => 'javascript', 'json' => 'json', 'julia' => 'julia', 'kotlin' => 'kotlin', 'lasso' => 'lasso', 'less' => 'less', 'lisp' => 'lisp', 'livecodeserver' => 'livecodeserver', 'livescript' => 'livescript', 'lua' => 'lua', 'makefile' => 'makefile', 'mathematica' => 'mathematica', 'matlab' => 'matlab', 'mel' => 'mel', 'mercury' => 'mercury', 'mizar' => 'mizar', 'monkey' => 'monkey', 'nginx' => 'nginx', 'nimrod' => 'nimrod', 'nix' => 'nix', 'nsis' => 'nsis', 'objectivec' => 'objectivec', 'ocaml' => 'ocaml', 'openscad' => 'openscad', 'oxygene' => 'oxygene', 'parser3' => 'parser3', 'perl' => 'perl', 'pf' => 'pf', 'php' => 'php', 'powershell' => 'powershell', 'processing' => 'processing', 'profile' => 'profile', 'prolog' => 'prolog', 'protobuf' => 'protobuf', 'puppet' => 'puppet', 'python' => 'python', 'q' => 'q', 'r' => 'r', 'rib' => 'rib', 'roboconf' => 'roboconf', 'rsl' => 'rsl', 'ruleslanguage' => 'ruleslanguage', 'rust' => 'rust', 'scala' => 'scala', 'scheme' => 'scheme', 'scilab' => 'scilab', 'scss' => 'scss', 'smali' => 'smali', 'smalltalk' => 'smalltalk', 'sml' => 'sml', 'sql' => 'sql', 'stata' => 'stata', 'step21' => 'step21', 'stylus' => 'stylus', 'swift' => 'swift', 'tcl' => 'tcl', 'tex' => 'tex', 'thrift' => 'thrift', 'tp' => 'tp', 'twig' => 'twig', 'typescript' => 'typescript', 'vala' => 'vala', 'vbnet' => 'vbnet', 'vbscript' => 'vbscript', 'vbscript-html' => 'vbscript-html', 'verilog' => 'verilog', 'vhdl' => 'vhdl', 'vim' => 'vim', 'x86asm' => 'x86asm', 'xl' => 'xl', 'xml' => 'xml'];

    /**
     * Return all languages
     *
     * @return void
     */
    public static function all()
    {
        return static::$languages;
    }
}
