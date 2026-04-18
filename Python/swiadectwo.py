# en: THIS IS EASY AND EXTENTABLE SCHOOL GREADING SYSTEM
# pl: OTO PROSTY I PRZYJEMNY SYSTEM DO OCENY SZKOLNYCH 


TRANSLATE:dict[str,dict[str,str]] = {
    "pl":{
        "prompt": "Podaj",
        "averege.grade":"średnia ocena",
        "bahavior.grade":"ocena z zachowania",
        "school":"szkole",
        "school.primary":"1 - podstawowa",
        "school.high":"2 - liceum",
        "school.job":"3 - technikum",
        "level": "klase",
        "separator":":",
        "whitespace":" ",
        "error.sanitize_intfloat": "Nie można skonwertować %s do liczby całkowitej lub wymiernej",
        "error.sanitize_int": "Nie można skonwertować %s do liczby całkowitej",
        "error.413": "413 - Jestem czajniczkiem a więc nie jestestem wstanie zrobić ekspresso.",
        "error.notinrange": "Liczba całkowita musi być w przedziale %s do %s a jest %s",
        "effect.nice":"TAK, to jest świadecto z wyróznieniem",
        "effect.notnice":"NIE, to nie jest świadectwo z wyróznieniem"

    },
    "en":{
        "prompt":"",
        "averege.grade":"Averege grade",
        "bahavior.grade":"Behavior grade",
        "school":"In what school you are",
        "school.primary": "1 - primary school",
        "school.high": "2 - high school",
        "school.job": "3 - specialization school",
        "level": "level",
        "separator":"?",
        "whitespace":"",
        "error.sanitize_infloat":"Cannot convert %s to int/float",
        "error.sanitize_int":"Cannot convert %s to int",
        "error.413":"413 - I'm a teapot and thus cannot brew coffy.",
        "error.notinrange":"Number have to be betwean %s and %s but is %s",
        "effect.nice":"U HAVE NICE GRADE",
        "effect.notnice":"U't have grade nice"
    }
}
LANG:str = 'pl'

def sanitize_int_or_float(x:str) -> float:
    """function sanitizing user input for an int or float"""
    x=x.strip()
    try:
        return float(x)
    except ValueError as e:
        raise ValueError(TRANSLATE[LANG]['error_sanitize_intfloat']%x) from e
def sanitize_int(x:str) -> float:
    x = x.strip()
    if x.isnumeric():
        return int(x)
    else:
        raise ValueError(TRANSLATE[LANG]['error.5sanitize_int']%x)    


try:
    averege_grade = sanitize_int_or_float(input("".join([TRANSLATE[LANG]['prompt'], TRANSLATE[LANG]['whitespace'], TRANSLATE[LANG]['averege.grade'],TRANSLATE[LANG]['separator']])))
    bahavior_grade = sanitize_int(input("".join([TRANSLATE[LANG]['prompt'], TRANSLATE[LANG]['whitespace'], TRANSLATE[LANG]['bahavior.grade'],TRANSLATE[LANG]['separator']])))
    school_type = sanitize_int(input("".join([TRANSLATE[LANG]['prompt']+TRANSLATE[LANG]['whitespace'],TRANSLATE[LANG]['school'],TRANSLATE[LANG]['separator'],'(',", ".join([TRANSLATE[LANG]['school.primary'],TRANSLATE[LANG]['school.high'],TRANSLATE[LANG]['school.job']]),')',TRANSLATE[LANG]['separator']])))
    level = sanitize_int(input("".join([TRANSLATE[LANG]['prompt'],TRANSLATE[LANG]['whitespace'],TRANSLATE[LANG]['level'],TRANSLATE[LANG]['separator']])))
    if not (1<=school_type<=3):
        raise ValueError(TRANSLATE[LANG]['error.notinrange']%(1,3,school_type))
    if not(1<=level<=8):
        raise ValueError(TRANSLATE[LANG]['error.notinrange']%(1,8,level))
    if (school_type!=1)&(averege_grade>=4.75)&(bahavior_grade in [5,6]):
        print(TRANSLATE[LANG]['effect.nice'])
    else:
        print(TRANSLATE[LANG]['effect.notnice'])
except ValueError as e:
    raise ValueError("413 - I'm a teapot and thus cannot brew coffy.") from e
