<?php
class TerminalColor {
    // rgular gray
	protected $REGULAR_GRARY  = "\e[0;30m";
    // rgular red
	protected $REGULAR_RED    = "\e[0;31m";
    // rgular green
	protected $REGULAR_GREEN  = "\e[0;32m";
    // rgular yellow
	protected $REGULAR_YELLOW = "\e[0;33m";
    // rgular blue
	protected $REGULAR_BLUE   = "\e[0;34m";
    // rgular purple
	protected $REGULAR_PURPLE = "\e[0;35m";
    // rgular cyan
	protected $REGULAR_CYAN   = "\e[0;36m";
    // rgular white
	protected $REGULAR_WHITE  = "\e[0;37m";

    // bold gray
	protected $BOLD_GRARY  = "\e[1;30m";
    // bold red
	protected $BOLD_RED    = "\e[1;31m";
    // bold green
	protected $BOLD_GREEN  = "\e[1;32m";
    // bold yellow
	protected $BOLD_YELLOW = "\e[1;33m";
    // bold blue
	protected $BOLD_BLUE   = "\e[1;34m";
    // bold purple
	protected $BOLD_PURPLE = "\e[1;35m";
    // bold cyan
	protected $BOLD_CYAN   = "\e[1;36m";
    // bold white
	protected $BOLD_WHITE  = "\e[1;37m";

    // underline gray
	protected $UNDERLINE_GRARY  = "\e[4;30m";
    // underline red
	protected $UNDERLINE_RED    = "\e[4;31m";
    // underline green
	protected $UNDERLINE_GREEN  = "\e[4;32m";
    // underline yellow
	protected $UNDERLINE_YELLOW = "\e[4;33m";
    // underline blue
	protected $UNDERLINE_BLUE   = "\e[4;34m";
    // underline purple
	protected $UNDERLINE_PURPLE = "\e[4;35m";
    // underline cyan
	protected $UNDERLINE_CYAN   = "\e[4;36m";
    // underline white
	protected $UNDERLINE_WHITE  = "\e[4;37m";

    // background gray
	protected $BACKGROUND_GRARY  = "\e[40m";
    // background red
	protected $BACKGROUND_RED    = "\e[41m";
    // background green
	protected $BACKGROUND_GREEN  = "\e[42m";
    // background yellow
	protected $BACKGROUND_YELLOW = "\e[43m";
    // background blue
	protected $BACKGROUND_BLUE   = "\e[44m";
    // background purple
	protected $BACKGROUND_PURPLE = "\e[45m";
    // background cyan
	protected $BACKGROUND_CYAN   = "\e[46m";
    // background white
	protected $BACKGROUND_WHITE  = "\e[47m";

    const RESET = "\e[0m";

    protected $colorType;
    // type REGULAR BOLD UNDERLINE BACKGROUND
    public function __construct($_colorType = 'REGULAR') {
        $this->colorType = $_colorType;
    }

    public function setColorType($type) {
        $this->colorType = $type;
    }

    public function setGrayColor($text) {
        $color = $this->colorType.'_GRARY';
        return $this->$color.$text.self::RESET;
    }

    public function setRedColor($text) {
        $color = $this->colorType.'_RED';
        return $this->$color.$text.self::RESET;
    }

    public function setGreenColor($text) { 
        $color = $this->colorType.'_GREEN';
        return $this->$color.$text.self::RESET;
    }

    public function setYellowColor($text) {
        $color = $this->colorType.'_YELLOW';
        return $this->$color.$text.self::RESET;
    }

    public function setBlueColor($text) {
        $color = $this->colorType.'_BLUE';
        return $this->$color.$text.self::RESET;
    }

    public function setPurpleColor($text) {
        $color = $this->colorType.'_PURPLE';
        return $this->$color.$text.self::RESET;
    }

    public function setCyanColor($text) {
        $color = $this->colorType.'_CYAN';
        return $this->$color.$text.self::RESET;
    }

    public function setWhiteColor($text) {
        $color = $this->colorType.'_WHITE';
        return $this->$color.$text.self::RESET;
    }
}
// example
$tmCol = new TerminalColor('BOLD');

echo $tmCol->setRedColor("I LOVE PHP!");
echo "\n";
echo $tmCol->setCyanColor("I LOVE C!");
echo "\n";