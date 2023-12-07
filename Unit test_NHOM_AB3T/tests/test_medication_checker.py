# test_medication_checker.py
import unittest
from medication_checker import check_medication_dosage

class TestMedicationChecker(unittest.TestCase):
    def test_liều_thấp(self):
        result = check_medication_dosage(1)
        self.assertEqual(result, "Liều lượng quá thấp")

    def test_liều_cao(self):
        result = check_medication_dosage(11)
        self.assertEqual(result, "Liều lượng quá cao")

    def test_liều_chấp_nhận(self):
        result = check_medication_dosage(5)
        self.assertEqual(result, "Liều lượng trong khoảng chấp nhận")

    def test_liều_thấp_nhất(self):
        result = check_medication_dosage(0)
        self.assertEqual(result, "Liều lượng quá thấp")

    def test_liều_cao_nhất(self):
        result = check_medication_dosage(10)
        self.assertEqual(result, "Liều lượng trong khoảng chấp nhận")

if __name__ == '__main__':
    unittest.main()
