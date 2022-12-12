import math

print("\nEnter your coordinates this way.\nFor example when your coordinates are : 47°06'43.4''N 19°41'06.5''E ")
print("First input should be North/South coordinate as : 47.112053")
print("Second input should be West/East coordinate as : 19.685151")

try:
    print("\nNORTH-WEST COORDINATES")
    NW1 = float(input("First input : "))
    NW2 = float(input("Second input : "))

    print("\nNORTH-EAST COORDINATES")
    NE1 = float(input("First input : "))
    NE2 = float(input("Second input : "))

    print("\nSOUTH-WEST COORDINATES")
    SW1 = float(input("First input : "))
    SW2 = float(input("Second input : "))

    print("\nSOUTH-EAST COORDINATES")
    SE1 = float(input("First input : "))
    SE2 = float(input("Second input : "))

except Exception as e:
    print("ALL INPUTS SHOULD BE NUMBERS.")
    quit()


index = input("\nWest side or East side (Type w for west, e for east) : ")

if(index != "w" and index != "e"):
    print("INPUT SHOULD BE w OR e")
    quit()

elif(index == "w"):
    NW1 = abs(NW1 - 90)
    NE1 = abs(NE1 - 90)
    SW1 = abs(SW1 - 90)
    SE1 = abs(SE1 - 90)

elif(index == "e"):
    NW1 = abs(NW1 + 90)
    NE1 = abs(NE1 + 90)
    SW1 = abs(SW1 + 90)
    SE1 = abs(SE1 + 90)

NW_x = 6378 * math.cos(math.radians(NW2)) * math.sin(math.radians(NW1))
NW_y = 6378 * math.sin(math.radians(NW2)) * math.sin(math.radians(NW1))
NW_z = 6378 * math.cos(math.radians(NW1))

NE_x = 6378 * math.cos(math.radians(NE2)) * math.sin(math.radians(NE1))
NE_y = 6378 * math.sin(math.radians(NE2)) * math.sin(math.radians(NE1))
NE_z = 6378 * math.cos(math.radians(NE1))

SW_x = 6378 * math.cos(math.radians(SW2)) * math.sin(math.radians(SW1))
SW_y = 6378 * math.sin(math.radians(SW2)) * math.sin(math.radians(SW1))
SW_z = 6378 * math.cos(math.radians(SW1))

SE_x = 6378 * math.cos(math.radians(SE2)) * math.sin(math.radians(SE1))
SE_y = 6378 * math.sin(math.radians(SE2)) * math.sin(math.radians(SE1))
SE_z = 6378 * math.cos(math.radians(SE1))


print("\nNORTH WEST")
print("x = ", NW_x, "\ny = ", NW_y, "\nz = ", NW_z)

print("\nNORTH EAST")
print("x = ", NE_x, "\ny = ", NE_y, "\nz = ", NE_z)

print("\nSOUTH WEST")
print("x = ", SW_x, "\ny = ", SW_y, "\nz = ", SW_z)

print("\nSOUTH EAST")
print("x = ", SE_x, "\ny = ", SE_y, "\nz = ", SE_z)