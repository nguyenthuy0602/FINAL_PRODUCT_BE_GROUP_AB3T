# medication_checker.py
def check_medication_dosage(dosage):
    if dosage < 0:
        return "Dose is too low"
    elif dosage > 10:
        return "Dose is too high"
    else:
        return "Dose is within the acceptable range"
